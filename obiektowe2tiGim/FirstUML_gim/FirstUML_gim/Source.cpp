#include <iostream>
#include <string>
#include "User.h"
#include "Guest.h"
#include "UserRepo.h"
using namespace std;

int main() {
	UserRepo repo;
	
	for (User* u : repo.users) {
		cout << u->Info() << endl;
	}
	
	for (User* u : repo.users) {
		cout << u->Info() << endl;
	}
	return 0;
}