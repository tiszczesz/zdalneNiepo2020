#include <iostream>
#include <string>
#include "User.h"
#include "Guest.h"
#include "UserRepo.h"
using namespace std;

int main() {
	UserRepo repo;
	repo.users[0]->LogOn("user1", "user1");
	for (User* u : repo.users) {
		cout << u->Info() << endl;
	}
	repo.users[0]->LogOut();
	for (User* u : repo.users) {
		cout << u->Info() << endl;
	}
	return 0;
}