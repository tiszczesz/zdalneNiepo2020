#pragma once
#include <vector>

#include "Guest.h"
#include "User.h"
class UserRepo
{
public:
	std::vector<User*> users;
	void FillUsers() {
		users.push_back(new User("user1", "user1"));
		users.push_back(new User("user2", "user2"));
		users.push_back(new User("user3", "user3"));
		users.push_back(new Guest());
		users.push_back(new User("user4", "user4"));
	}
	UserRepo() {
		FillUsers();
	}
	~UserRepo() {
		for (User* user : users) {
			delete user;
			user = nullptr;
		}
		users.clear();
	}
};

