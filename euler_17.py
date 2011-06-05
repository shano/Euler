#!/usr/bin/python

def main():
  """Euler 17 solution"""
  total = 0
  for i in range(1,1001):
    total += len(int_to_word(i))

  return total

def int_to_word(number):
  """Convert integer to british std words"""
  if number < 20:
    print "%d = %s" % (number,smallest_to_word(number))
    return smallest_to_word(number)
  elif number < 100:
    print "%d = %s" % (number,tens_to_word(number))
    return tens_to_word(number)
  elif number < 1000:
    print "%d = %s" % (number,hundreds_to_word(number))
    return hundreds_to_word(number)
  elif number == 1000:
    print "%d = %s" % (number,'onethousand')
    return 'onethousand'

def smallest_to_word(number):
  """Return word version of numbers under twenty"""
  to_19 = [ 'one',   'two',  'three', 'four',   'five',   'six',
          'seven', 'eight', 'nine', 'ten',   'eleven', 'twelve', 'thirteen',
          'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen' ]

  return to_19[number-1]

def tens_to_word(number):
  """Return word version of numbers under 100"""
  str_number = str(number)
  result = ''
  tens  = ( 'ten', 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety')
  result = tens[int(str_number[0])-1] 

  if int(str_number[1]) > 0:
    result += smallest_to_word(int(str_number[1]))
  return result 

def hundreds_to_word(number):
  """Return word version of numbers under 1000"""
  str_number = str(number)
  result = smallest_to_word(int(str_number[0])) + "hundred"
  if int(str_number[1]) == 1:
    result += "and"+smallest_to_word(int(str_number[1]+str_number[2]))
  elif int(str_number[1]) > 0:
    result += "and"+tens_to_word(int(str_number[1]+str_number[2]))
  elif int(str_number[2]) > 0:
    result += "and"+smallest_to_word(int(str_number[2]))
  return result

if __name__ == '__main__':
  print main()
