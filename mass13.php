<?php
var N;
var numb;
var blizh = 0;
get(N);
get(numb);
var A = array();
for (int i = 0; i < N; i++){
	get(A[i]);
}
abs(A[0] - numb) = blizh;
for (int i = 1; i < N; i++){
	if (abs(A[i] - numb) < blizh) blizh = A[i];
}
print(" Ближайший элемент: " + blizh);