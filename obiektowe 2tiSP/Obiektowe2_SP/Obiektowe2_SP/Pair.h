#pragma once
struct Pair
{
	int height;
	int width;
	string Info() {
		return "Obiekt o szerokosci: " + to_string(width) + " i wysokosci: " + to_string(height)
		 + " ma pole powierzchni: " + to_string(GetArea());
	}
	int GetArea() { return width * height; }
};

