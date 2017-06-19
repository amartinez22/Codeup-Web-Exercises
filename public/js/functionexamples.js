1. Write a JavaScript function that reverse a number. Go to the editor
Example x = 32243;
Expected Output : 34223 

function reverse(n)
{
	n = n + "";
	return n.split("").reverse().join("");
}
console.log(reverse(3347580));

2. Write a JavaScript function that checks whether a passed string is palindrome 
or not? Go to the editor. A palindrome is word, phrase, or sequence that reads the 
same backward as forward, e.g., madam or nurses run.

function check_Palindrome(str_entry){
// Change the string into lower case and remove  all non-alphanumeric characters
   var cstr = str_entry.toLowerCase().replace(/[^a-zA-Z0-9]+/g,'');
	var ccount = 0;
// Check whether the string is empty or not
	if(cstr==="") {
		alert("Nothing found!");
		return false;
	}
// Check if the length of the string is even or odd 
	if ((cstr.length) % 2 === 0) {
		ccount = (cstr.length) / 2;
	} else {
// If the length of the string is 1 then it becomes a palindrome
		if (cstr.length === 1) {
			alert("Entry is a palindrome.");
			return true;
		} else {
// If the length of the string is odd ignore middle character
			ccount = (cstr.length - 1) / 2;
		}
	}
// Loop through to check the first character to the last character and then move next
	for (var x = 0; x < ccount; x++) {
// Compare characters and drop them if they do not match 
		if (cstr[x] != cstr.slice(-1-x)[0]) {
			alert("Entry is not a palindrome.");
			return false;
		}
	}
	alert("The entry is a palindrome.");
	return true;
}
check_Palindrome('madam');
check_Palindrome('nurses run');
check_Palindrome('fox');

3. Write a JavaScript function that generates all combinations of a string.
Example string : 'dog' 
Expected Output : d,do,dog,o,og,g 
Click me to see the solution

function substrings(str1)
{
var array1 = [];
  for (var x = 0, y=1; x < str1.length; x++,y++) 
  {
   array1[x]=str1.substring(x, y);
    }
var combi = [];
var temp= "";
var slent = Math.pow(2, array1.length);

for (var i = 0; i < slent ; i++)
{
    temp= "";
    for (var j=0;j<array1.length;j++) {
        if ((i & Math.pow(2,j))){ 
            temp += array1[j];
        }
    }
    if (temp !== "")
    {
        combi.push(temp);
    }
}
  console.log(combi.join("\n"));
}

substrings("dog");



4. Write a JavaScript function that returns a passed string with letters in alphabetical order. Go to the editor
Example string : 'webmaster' 
Expected Output : 'abeemrstw'
Assume punctuation and numbers symbols are not included in the passed string.


function alphabet_order(str)
  {
return str.split('').sort().join('');
  }
console.log(alphabet_order("webmaster"));

5. Write a JavaScript function that accepts a string as a parameter and converts the first letter of each word of the string in upper case. Go to the editor
Example string : 'the quick brown fox' 
Expected Output : 'The Quick Brown Fox '

function uppercase(str)
{
  var array1 = str.split(' ');
  var newarray1 = [];
    
  for(var x = 0; x < array1.length; x++){
      newarray1.push(array1[x].charAt(0).toUpperCase()+array1[x].slice(1));
  }
  return newarray1.join(' ');
}
console.log(uppercase("the quick brown fox"));

6. Write a JavaScript function that accepts a string as a parameter 
and find the longest word within the string.
Example string : 'Web Development Tutorial' 
Expected Output : 'Development'

function find_longest_word(str)
{
  var array1 = str.match(/\w[a-z]{0,}/gi);
  var result = array1[0];

  for(var x = 1 ; x < array1.length ; x++)
  {
    if(result.length < array1[x].length)
    {
    result = array1[x];
    } 
  }
  return result;
}
console.log(find_longest_word('Web Development Tutorial'));


7. Write a JavaScript function that accepts a string as a parameter and 
counts the number of vowels within the string.
Note : As the letter 'y' can be regarded as both a vowel and a consonant, 
we do not count 'y' as vowel here. 
Example string : 'The quick brown fox' 
Expected Output : 5

function vowel_count(str1)
{
  var vowel_list = 'aeiouAEIOU';
  var vcount = 0;
  
  for(var x = 0; x < str1.length ; x++)
  {
    if (vowel_list.indexOf(str1[x]) !== -1)
    {
      vcount += 1;
    }
  
  }
  return vcount;
}
console.log(vowel_count("The quick brown fox"));

8. Write a JavaScript function that accepts a number as a parameter and check 
the number is prime or not.
Note : A prime number (or a prime) is a natural number greater than 1 that 
has no positive divisors other than 1 and itself.
Click me to see the solution

function test_prime(n)
{

  if (n===1)
  {
    return false;
  }
  else if(n === 2)
  {
    return true;
  }else
  {
    for(var x = 2; x < n; x++)
    {
      if(n % x === 0)
      {
        return false;
      }
    }
    return true;  
  }
}

console.log(test_prime(34));



9. Write a JavaScript function which accepts an argument and returns the type.
Note : There are six possible values that typeof returns: object, boolean, 
function, number, string, and undefined.

function detect_data_type(value)
{
var dtypes = [Function, RegExp, Number, String, Boolean, Object], x, len;
    
if (typeof value === "object" || typeof value === "function") 
    {
     for (x = 0, len = dtypes.length; x < len; x++) 
     {
            if (value instanceof dtypes[x])
            {
                return dtypes[x];
            }
      }
    }
    
    return typeof value;
}
console.log(detect_data_type(12));
console.log(detect_data_type('w3resource'));
console.log(detect_data_type(false));


10. Write a JavaScript function which returns the n rows by n columns identity matrix.
function matrix(n) {

        var i;
        var j;

        for (i=0; i < n; i++)
        {
          for (j=0; j < n; j++)
          {
               if (i === j)
               {
                
                 console.log(' 1 ');
               }
                      
               else 
                {
                 console.log(' 0 ');}
                }
             console.log('----------');
           }
       }
matrix(4);

11. Write a JavaScript function which will take an array of numbers stored and find the second lowest and second greatest numbers, respectively. Go to the editor
Sample array : [1,2,3,4,5]
Expected Output : 2,4 
Click me to see the solution.

function Second_Greatest_Lowest(arr_num)
{
  arr_num.sort(function(x,y)
           {
           return x-y;
           });
  var uniqa = [arr_num[0]];
  var result = [];
  
  for(var j=1; j < arr_num.length; j++)
  {
    if(arr_num[j-1] !== arr_num[j])
    {
      uniqa.push(arr_num[j]);
    }
  }
    result.push(uniqa[1],uniqa[uniqa.length-2]);
  return result.join(',');
  }

console.log(Second_Greatest_Lowest([1,2,3,4,5]));



















