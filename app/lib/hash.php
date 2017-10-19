<?php 
/**SALTING::strenghtening password to make them irreversible in the hands of hackers
 * salt is a string of text which will be added to the password
 * hash_update updates the hash init function 
 * hash_final returns the output data to be used
 * hash_hmac generates a keyed hash value using the hmac method
 */
class Hash{
	
	public static function create($algo, $data, $salt) {
		$context = hash_init($algo, HASH_HMAC, $salt);
		hash_update($context, $data);
		return hash_final($context);
	}
}

?>