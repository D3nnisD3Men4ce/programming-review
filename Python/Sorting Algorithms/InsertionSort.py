
def insertionSort(arr):
    for x in range(1, len(arr)):                            # Start at second index since first index is considered as "sorted"
        value_to_sort =  arr[x]

        while arr[x - 1] > value_to_sort and x > 0:         # Include x > 0 since Python allows negative indexing
            arr[x - 1], arr[x] = arr[x], arr[x - 1]         # value_to_sort was not used since the index will be changed with x -= 1
            x -= 1                                          # Step backward 1 at a time
    
    return arr



arr = [23,5,675,12,87,96,45,896,2,7,1,67,2]
sorted_insert = insertionSort(arr)
print(sorted_insert)
