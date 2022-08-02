#include <iostream>
using namespace std;

int work(int x) {
    return x;
};

int work2(int& x) {
    x++;
    return x;
};


int main() {
    int a = 5;
    int& b = a;
    int & c = a;
    int &d = a;
    cout << &a << " " << a << endl;
    cout << &b << " " << b << endl;
    cout << &c << " " << c << endl;
    cout << &d << " " << d << endl;

    cout << "More memory is used to create variable a and x: " << work(a) << endl;;
    cout << "Less memory is used since x is referenced to a: " << work2(a) << endl;
    cout << &a << " " << a << " The data 'a' is changed within the funtion work2" << endl;


    int x = 10;
    int & y = x; // The reference is permanent, you can't reassign the location that a reference refers to
    int z = 100;
    y = z;
    cout << y << " y talks about the location of x" << endl;
    cout << x << " x also changes" << endl;
}

