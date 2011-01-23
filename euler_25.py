import gmpy
''' Gmpy makes life pretty easy'''

def main(digits):
  i = 0
  while len(str(gmpy.fib(i)))!=1000:
    i += 1

  print i

if __name__ == '__main__':
  main(1000)
