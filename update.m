function y = update(y, X)
m = size(X, 1);
for i=1:m;
  if (y(i,1) <= 3 );
    y(i,1) = 0;
  else
    y(i,1) = 1;
  endif
endfor;
end