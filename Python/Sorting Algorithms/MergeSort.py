def mergeSort(arr):
    if len(arr) > 1:                                           # If given array has more than 2 elements
        mid = len(arr) // 2                                    # Find middle element of arrary, use floor division
        left_half = arr[:mid]
        right_half = arr[mid:]

        mergeSort(left_half)
        mergeSort(right_half)
        
        i = j = k = 0                                          # 2 iterators for each half (i, j), 1 iterator for the main list (k)

        while i < len(left_half) and j < len(right_half):      # Notice (i < len(left_half) and j < len(right_half))
            if left_half[i] <= right_half [j]:                 # Include equal to sign for duplicates
                arr[k] = left_half[i]
                i += 1                                         
            else:                                              
                arr[k] = right_half[j]
                j += 1
            k += 1                                             # Next element of whole array

        while i < len(left_half):                              # Find remaining left half
            arr[k] = left_half[i]
            k += 1
            i += 1

        while j < len(right_half):                             # Find remaining right half
            arr[k] = right_half[j]
            k += 1
            j += 1
        print(arr)
        
    return arr

arr = [23,5,675,12,87,96,45,896,2,7,1,67,2]
sorted_merge = mergeSort(arr)
print(sorted_merge)











