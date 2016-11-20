function p = predict(theta, X)
m = size(X, 1); 
p = zeros(m, 1);
predictions = X*theta;
for i=1:m;
  if (sigmoid(predictions)(i,1) >= 0.5);
    p(i,1) = 1;
  else
    p(i,1) = 0;
  endif
endfor;
end
