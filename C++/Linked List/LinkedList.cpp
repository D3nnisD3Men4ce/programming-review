#include <iostream>
using namespace std;


// struct Node { 
//     int data;       // of type integer
//     Node *next;     // of type Node*
// };

typedef struct Node { 
    int data;      
    Node *next;     
}* pNode;           // Basically the same with the code above but pNode can be used instead of Node*

Node* head;

class LinkedList {
    
    public:
        int size = 0;
        LinkedList() {
            head = NULL;
        }

        void add_first(int num) {
            pNode new_node = new Node; // 'new' operator is a better alternative to using malloc()
            new_node -> data = num;
            new_node -> next = NULL;

            if (head == NULL) {
                head = new_node;
            } else {
                new_node -> next = head;
                head = new_node;
            }
            size++;
        };

        void add_end(int num) {
            Node* new_node = new Node;
            new_node -> data = num;
            new_node -> next = NULL;
            Node* current = head;

            if (head == NULL) {
                head = new_node;
            }

            while (current -> next != NULL) {
                current = current -> next;
            }
            current -> next = new_node;
            size++;

        };

        void add_at(int num, int index) {
            Node* new_node = new Node;
            new_node -> data = num;
            new_node -> next = NULL;
            Node* current = head;
            int itr = 1;

            if (index > size + 1 || index < 0) {
                cout << "Index out of range" << endl;
            } else if (index == 0) {
                add_first(num);
            } else if (index == size + 1) {
                add_end(num);
            }

            while(current != NULL) {
                if (itr == index) {
                    new_node -> next = current -> next;
                    current -> next = new_node;
                    size++;
                }
                itr++;
                current = current -> next;
            }

        };

        void remove_end() {
            if (head == NULL) {
                cout << "Empty Linked List" << endl;
            } else if (head -> next == NULL) {
                head = NULL;
            }

            Node* current = head;
            while(current -> next -> next != NULL) {
                current = current -> next;
            }
            current -> next = NULL;
            size--;
        };


        void remove_first() {
            if (head == NULL) {
                cout << "Empty Linked List" << endl;
            }
            head = head -> next;
            size--;
        };


        void remove_at(int index) {
            if (head == NULL) {
                cout << "Empty Linked List" << endl;
                return;
            } else if (index == 0) {
                remove_first();
                return;
            } else if (index == size - 1) {
                remove_end();
                return;
            } else if (index >= size || index < 0) {
                cout << "Index out of range" << endl;
                return;
            }

            pNode current = head;
            
            int itr = 0;
            while(current != NULL) {
                if (index - 1 == itr) {
                    pNode temp = current -> next;
                    current -> next = temp -> next;
                }
                current = current -> next;
                itr++;
            }

            size--;
            
        };

        void remove_value(int num) {
            if (head == NULL) {
                cout << "Empty Linked List" << endl;
            } 
            if(head -> data == num) {
                remove_first();
            }

            Node* current = head;
            while (current -> next != NULL) {

                if (current -> next -> data == num) {
                    if (current -> next -> next == NULL) {
                        remove_end();
                        return;
                    }
                    current -> next = current -> next -> next;
                    size--;
                } 

                current = current -> next;


            }
        };

        void get_value(int index) {
            if (head == NULL) {
                cout << "Empty Linked List" << endl;
            } else if (index >= size) {
                cout << "Out of range" << endl;
            }

            Node* current = head;
            int itr = 0;

            while(current != NULL) {
                if (itr == index) {
                    cout <<  current -> data << " is at index " << index << endl;
                }
                itr++;
                current = current -> next;
            }
        };

        void find(int num) {
            if (head == NULL) {
                cout << "Empty Linked List" << endl;
            }

            Node* current = head;
            int itr = 0;

            while (current != NULL) {
                if (current -> data == num) {
                    cout << num << " is at index " << itr << endl;
                    return;
                } 
                itr++;
                current = current -> next;
            }
            cout << num << " is not on the linked list" << endl;
            
        };

        void reverse_list_itr() {
            if (head == NULL) {
                cout << "Empty Linked List" << endl;
            }

            pNode previous, current, next;
            previous = NULL;
            current = head;

            while (current != NULL) {
                next = current -> next;
                current -> next = previous;
                previous = current;
                current = next;
            }
            head = previous;

        };


        void reverse_list_recursion(pNode current) {
            if (current -> next == NULL) {      // Exit condition
                head = current;
                return;
            }
            reverse_list_recursion(current -> next);

            pNode temp = current -> next;
            temp -> next = current;
            current -> next = NULL;
        };


        // void sort_list() {
  
        // };


        void display() {
            Node* current = head;
            while(current != NULL) {
                cout << current -> data << " -> ";
                current = current -> next;
            }
            link_size();
            cout << endl;
        };

        void display_recursive(pNode current) {
            if (current == NULL) {
                cout << endl;
                return;
            }

            cout << current -> data << " -> ";
            display_recursive(current -> next);
        };

        void display_reverse_recursive(pNode current) {
            if (current == NULL) {
                return;
            }
            display_reverse_recursive(current -> next);
            cout << current -> data << " -> ";
        };

        void link_size() {
            cout << "\nThe linked list has a size of " << size << endl;
        };

        void is_empty() {
            if (head == NULL) {
                cout << "Linked List is empty" << endl;
            } else {
                cout << "Linked List is not empty" << endl;
            }
        };


};


int main() {
    LinkedList test;

    test.add_first(1);
    test.add_first(2);
    test.add_first(3);
    test.add_first(4);
    test.add_end(5);
    test.add_end(99);
    test.add_end(99);
    test.add_end(99);
    test.add_at(69, 1);
    test.display();
    // test.link_size();

    test.remove_end();
    test.display();
    // test.link_size();

    test.remove_first();
    test.display();
    // test.link_size();

    test.remove_value(5);
    test.display();
    // test.link_size();

    test.get_value(0);
    test.find(1);
    test.is_empty();

    test.remove_at(6);
    test.display();
    // test.link_size();

    cout << "Reversing linked list: " << endl;
    test.reverse_list_itr();
    test.display();
    cout << "Reversing linked list: " << endl;
    test.reverse_list_recursion(head);
    test.display();

    test.display_recursive(head);
    test.display_reverse_recursive(head);
    cout << endl << endl;
    

    // test.sort_list();
    // test.display();

}