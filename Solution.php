class Solution {

    /**
     * @param String $word
     * @return Boolean
     */
    function detectCapitalUse($word) {
        if (strtoupper($word) === $word) {
            return true;
        }
        
        if (strtolower($word) === $word) {
            return true;
        }
        
        if (ucfirst(strtolower($word)) === $word) {
            return true;
        }

        return false;
    }
}
