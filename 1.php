<?php
var Xn, Xk, S, C, N;
var i = 0;
get(Xn);
get(Xk);
get(N);
S = 0;
C = 0;
var M = array();
var M1 = array();
for (i; i < N; i++) {
	get(M[i]);
}
var j=0;
for (i = 0; i < N; i++) {
	if (M[i] > Xn && M[i] < Xk) {
		S = S + M[i];
		C++;
		M1[j] = M[i];
		j++;
	}
}
print(S); 
print(C);
var p = 0;
var count = 0;
/*do{
	count = 0;
	for (i = 0;i < C -  1; i++){
		if (M1[i] < M1[i+1]){
      	p = M1[i];
      	M1[i] = M1[i+1];
      	M1[i+1] = M1[i];
      	count++;
		}
	}
}while(count != 0);*/
var max = M1[0];
var maxi = 0;
for ( i = 0; i < C - 1; i++){
	for ( j = 0; j < C; j++){
		if (M1[j] > max) maxi = j;
	}
	p = M1[i];
	M1[i] = M1[maxi];
	M1[maxi] = p;

}
for (i = 0; i < C; i++){
	print(M1[i]);
}
