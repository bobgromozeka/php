<?php
var N;
var numb;
var blizh = 0;
var min = 0;
get(N);
get(numb);
var A = array();
for (int i = 0; i < N; i++){
	get(A[i]);
}
blizh = A[0];
min = abs(A[0] - numb);
for (int i = 1; i < N; i++){
	if (abs(A[i] - numb) < min){ 
		blizh = A[i];
		min = abs(A[i] - numb);
	}
}
print("Ближайший элемент: " + blizh);