#include <iostream>
using namespace std;


int main() {
    int x = 5;
    cout << &x << endl;
    int *y = &x; // y is a pointer
    cout << *y << " is found at address " << y << endl; // *y is dereferencing a the pointer y

    // You define the pointer using an *
    // You can dereference a pointer using an *
}
