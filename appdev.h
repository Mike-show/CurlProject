
#include <stdio.h>
#include <stdlib.h>
#include <curl/curl.h>
#include <time.h>

#define N 20

typedef struct {
	int max;
	int min;
	char rname[20];
}rock;

void send_data(rock);