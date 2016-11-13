function userinput = inputfunc(X)
userinput(1) = 1;
  for i=2:15
    userinput(1,i) = input("Enter Value");
  endfor
  end