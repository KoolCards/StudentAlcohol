clear ; close all; clc
data = load('formatdata.txt');
X = data(:, [1,2,3,4,5,7,8,9,12,14,17,18,19,23]);
y = data (:, [20]);
y = update(y, X);
[m, n] = size(X);
X = [ones(m, 1) X];
disp(y);
pause;
initial_theta = zeros(n + 1, 1);
[cost, grad] = costFunction(initial_theta, X, y);
options = optimset('GradObj', 'on', 'MaxIter', 400);
[theta, cost] = fminunc(@(t)(costFunction(t, X, y)), initial_theta, options);
p = predict(theta, X);
userinput = inputfunc(X);
userinput
pause;
prob = sigmoid(userinput * theta);
disp (prob);
pause;
fprintf('Train Accuracy: %f\n', mean(double(p == y)) * 100);