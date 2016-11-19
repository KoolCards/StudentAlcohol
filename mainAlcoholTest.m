#! /usr/local/bin/octave
clear ; close all; clc
data = load('formatdata.txt');
data2 = load('octaveinput.txt');
X = data(:, [1,2,3,4,5,7,8,9,12,14,17,18,19,23]);
fid = fopen("testin.text",'w');
fprintf(fid,'%u', X);
fclose(fid);
y = data (:, [20]);
y = update(y, X);
[m, n] = size(X);
X = [ones(m, 1) X];
initial_theta = zeros(n + 1, 1);
[cost, grad] = costFunction(initial_theta, X, y);
options = optimset('GradObj', 'on', 'MaxIter', 400);
[theta, cost] = fminunc(@(t)(costFunction(t, X, y)), initial_theta, options);
p = predict(theta, X);
money = data2(1, :);
money = [ones(size(money, 1), 1) money];
prob = sigmoid(money * theta);
prop = prob*100;
fid = fopen("outputprob.txt",'w');
fprintf(fid,'%u', prob);
fclose(fid);
 if (prob < 0.5)
  prob = 0;
 else
  prob = 1;
  endif;
fid = fopen("outputfinal.txt",'w');
fprintf(fid,'%u', prob);
fclose(fid);
fprintf('Train Accuracy: %f\n', mean(double(p == y)) * 100);
accuracy = mean(double(p == y)) * 100;
fid = fopen("accuracy.txt",'w');
fprintf(fid,'%u', accuracy);
fclose(fid);