#include <iostream>
#include <cstdlib>
#include <ctime>

void fillArrayWithRandomNumbers(int arr[], int size);
void printArrayElements(const int arr[], int size);

int main() {
    const int SIZE = 100;
    int numbers[SIZE];

    // Seed the random number generator
    srand(time(nullptr));

    // Fill the array with random numbers
    fillArrayWithRandomNumbers(numbers, SIZE);

    // Print the address and value of each item in the array
    printArrayElements(numbers, SIZE);

    return 0;
}

// Function to fill the array with random numbers
void fillArrayWithRandomNumbers(int arr[], int size) {
    for (int i = 0; i < size; ++i) {
        arr[i] = rand() % 1000; // Generate a random number between 0 and 999
    }
}

// Function to print the address and value of each item in the array
void printArrayElements(const int arr[], int size) {
    std::cout << "Address\t\tValue" << std::endl;
    for (int i = 0; i < size; ++i) {
        std::cout << &arr[i] << "\t" << arr[i] << std::endl;
    }
}
