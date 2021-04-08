#include "Person.h"

#include <ostream>
#include <iomanip>

std::ostream& operator<<(std::ostream& os, const Person& p) {
	os << "Informacje o osobie:" << std::endl;
	os << std::setw(20) <<"Imie:\t" <<p.firstName << std::endl;
	os << std::setw(20) << "Nazwisko:\t" <<p.lastName << std::endl;
	os << std::setw(20) << "Wiek:\t" <<p.age << std::endl;
	return os;
}
