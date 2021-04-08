#include <iostream>
#include <cstdlib>
#include <ctime>
#include <vector>

#include "ProductRepo.h"


using namespace std;

int main() {
	ProductRepo repo;
	vector<Product> list = repo.GetAll();
	for (auto product : list) {
		cout << product << endl;
	}
	cout << "Najtanszy produkt:" << endl;
	cout << repo.GetMin() << endl;
	//todo napisac GetMax oraz przeciazyc operoator >
	//todo dla ambitnych napisac funkcje zwracajaca vetor produktow o ustalonej cenie  GetByPrice(4.88) moze byc pusty
	return 0;
}
