import random
def quickSort(arr):
    if len(arr) <= 1:                           # Return array right away if length requirement is not met
        return arr
    else:
        random.shuffle(arr)                     # Shuffling randomizes the time complexity
        pivot = arr.pop()

        greater_values = []
        lesser_values = []

        for value in arr:
            if value > pivot:
                greater_values.append(value)
            else:
                lesser_values.append(value)

        return quickSort(lesser_values) + [pivot] + quickSort(greater_values)       # Recursion with list concatenation

arr = [23,5,675,12,87,96,45,896,2,7,1,67,2]
sorted_quickie = quickSort(arr)
print(sorted_quickie)
