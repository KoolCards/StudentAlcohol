 clf;
data = load('formatdata.txt');
x = data (:, [20]);
 y = data (:, [21]);
z = bar(x,y);