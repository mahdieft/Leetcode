# Max Consecutive Ones III

Given a binary array `nums` and an integer `k`, return the maximum number of consecutive 1's in the array if you can
flip at most k 0's.

## Example 1:

```
Input: nums = [1,1,1,0,0,0,1,1,1,1,0], k = 2
Output: 6
Explanation: [1,1,1,0,0,1,1,1,1,1,1]
```

## Example 2:

```
Input: nums = [0,0,1,1,0,0,1,1,1,0,1,1,0,0,0,1,1,1,1], k = 3
Output: 10
Explanation: [0,0,1,1,1,1,1,1,1,1,1,1,0,0,0,1,1,1,1]
```

## Constraints:

* `1 <= nums.length <= 10^5`
* `nums[i]` is either 0 or 1.
* `0 <= k <= nums.length`
