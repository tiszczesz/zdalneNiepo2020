#include <iostream>
#include <string>
#include "User.h"
#include "Guest.h"
#include "UserRepo.h"
#include "ILogin.h"
using namespace std;

int main() {
	UserRepo repo;
	for(User* u : repo.users) {
		ILogin* u1 = dynamic_cast<ILogin*>(u);
		if(u1!=nullptr) {
			cout << "Podaj login dla " << u->Info() << endl;
			string login;
			cin >> login;
			cout << "Podaj haslo dla " << u->Info() << endl;
			string pswd;
			cin >> pswd;
			u1->LogOn(login, pswd);
		}
	}
	
	for (User* u : repo.users) {
		cout << u->Info() << endl;
	}
	
	for (User* u : repo.users) {
		cout << u->Info() << endl;
	}
	return 0;
}