# The most inefficient sorting algorithm


def selectionSort(arr):
    for x in range(len(arr)):                             # 5. Second iteration and so on
        min = arr[x]                                      # 1. Set value of first index as minimum
        for y in range(x, len(arr)):
            if min > arr[y]:                              # 2. Traverse the loop and compare the minimum value to other values
                min = arr[y]                              # 3. If a value less than the minimum is found, set it as the new minimum
                arr[x], arr[y] = arr[y], arr[x]           # 4. Swap

    return arr

arr = [23,5,675,12,87,96,45,896,2,7,1,67,2]
sorted_selection = selectionSort(arr)
print(sorted_selection)