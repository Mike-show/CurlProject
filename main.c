#include "appdev.h"

int main(void) {
	rock r;
	printf("Application Developer Rock\n");
	printf("Enter Rocker's name: ");
	scanf("%s", r.rname);
	srand(time(NULL));
	r.max = rand() % 50 + 51;
	r.min = rand() % 50 + 1;
	send_data(r);
	printf("Rock n Roll\n");
	return 0;
}
