#include <stdlib.h>
#include <stdio.h>

void usage(char *s)
{
  printf("Usage : %s <entier> <entier>\n",s);
  exit(-1);
}

int main(int argc, char *argv[])
{

  int i,j,nb_etoileM,nb_etoileN;

  if (argc != 3)
  {
    usage(argv[0]);
  }
  
  else
    {
      nb_etoileM=atoi(argv[1]);
      nb_etoileN=atoi(argv[2]);
    }

  for(i=0;i<nb_etoileM;i++)
  {
    printf("*");
    
    for(j=0;j<nb_etoileN;j++)
      {
	printf("*");
      }
    printf("\n");
  }
  
  printf("\n");

  exit(0);
  
}
