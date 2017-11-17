/*Two arrays are called similar if one can be obtained from another by swapping at most one pair of elements in one of the arrays.
Given two arrays a and b, check whether they are similar.*/

boolean areSimilar(int[] a, int[] b) {
    int left =0;
    int right = a.length -1;
    boolean isSwapped = false;
    while(left<=right){
        if(a[left] == b[left]){
            left++;
            continue;
        }
        if(a[right] == b[right]){
            right--;
            continue;
        }
        if(isSwapped == false){
            isSwapped = true;
            int temp = a[left];
            a[left] = a[right];
            a[right] = temp;
            if(a[left] != b[left] || a[right] != b[right]){
                return false;
            }
            continue;
        }
        return false;
    }
    return true;
}