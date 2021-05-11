#include <iostream>
#include <string>
#include "User.h"
#include "Guest.h"
using namespace std;

int main() {
	User u1("user1", "user1");
	cout << u1.Info() << endl;
	cout << "Podaj login: ";
	string login;
	cin >> login;
	cout << "Podaj haslo: ";
	string password;
	cin >> password;
	u1.LogOn(login, password);
	cout << u1.Info() << endl;
	cout << " ---------------- wylogowywanie --------\n\n";
	u1.LogOut();
	cout << u1.Info() << endl;
	Guest g1;
	cout << g1.Info();
	return 0;
}