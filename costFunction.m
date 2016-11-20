function [J, grad] = costFunction(theta, X, y)

m = length(y); 
J = 0;
grad = zeros(size(theta));

ytrue = -y' * log(sigmoid(X * theta));
yfalse = (1-y') * log(1-sigmoid(X * theta));
J = 1/m * (ytrue-yfalse);
grad = 1/m * ((sigmoid(X * theta)-y)' * X);


end
