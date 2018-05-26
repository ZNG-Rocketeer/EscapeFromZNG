#ifndef _FILE_H_
#define _FILE_H_
#include "liste.h"


typedef liste file;

//creer une file vide
file file_vide();

//test si file vide
int est_vide(file f);

//defilage
file defile(file f);

//enfilage
file enfile(file f, element e);

//taille d'une file
int taille_file(file f);

//recherche d'élément
int est_dans_file(element e, file f);

//valeur du premier element de la file
int premier_file(file f);

#endif
