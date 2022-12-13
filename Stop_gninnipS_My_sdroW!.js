function spinWords(str) {
    let strArr = str.split(' ');

    for (let i = 0; i < strArr.length; i++)
     {
      if (strArr[i].length >= 5)
        strArr[i] = strArr[i].split('').reverse().join('');
    }
    
    return strArr.join(' ');
  }