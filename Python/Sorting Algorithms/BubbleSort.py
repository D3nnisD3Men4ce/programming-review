# Big O of n**2
# Worst case happens when the two for loops are exhausted
# Best case happens if list is already or nearly sorted

def bubbleSort(arr):
    for left in range(len(arr)):                                    # Compare first index (left) to second index (right)
        for right in range(left + 1, len(arr)):                     # Traverse list by partner
            if arr[left] > arr[right]:
                arr[left], arr[right] = arr[right], arr[left]       # Python shorthand for swapping
    return arr

arr = [23,5,675,12,87,96,45,896,2,7,1,67,2]
sorted_bubble = bubbleSort(arr)
print(sorted_bubble)
