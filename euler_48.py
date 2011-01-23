from math import pow

def main(limit):
  i = 1
  total = 0
  while i < limit+1:
    total += i**i
    i += 1

  print str(total)

if __name__ == '__main__':
  main(1000)
