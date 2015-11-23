/* Programming Languages Assignment 3 - prolog_hw.pl */
 
/* Created by Abhishek Sharma on 11/22/15. */

/*Copyright (c) 2015 Abhishek. All rights reserved.*/

/* Rule(s) for Fibonacci  */

fib(0, 1).
fib(1, 1).
fib(N, R) :- N1 is N-1, N2 is N-2, fib(N1, R1), fib(N2, R2), R is R1 + R2.


/* Rule(s) for the RDC algorithm from SCHEME */

rdc([_], []).
rdc([X|Xs], [X|WithoutLast]) :- 
rdc(Xs, WithoutLast).


/* Rule to determine if a list contains a given member */

mem(X, [Y|T]) :- X = Y; mem(X, T).