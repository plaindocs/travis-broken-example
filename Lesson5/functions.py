def add_two_values(value1, value2):
    """ Adds two integers

    Arguments:
    value1: first integer value e.g. 10
    value2: second integer value e.g. 2
    """
    return value1 + value2

def add_multiple_values(*args):
    """ Adds a list of integers

    Arguments:
    args: A list of integers e.g. 1,2,3,4,5
    """
    sum_ = 0
    for number in args:
        sum_ = sum_ + number

    return sum_

def get_full_name(firstname, lastname):
    """ Return the full name in the format firstname, lastname

    Arguments:
    firstname: First name e.g. John
    lastname: Last name e.g. Doe
    """
    return lastname + ", " + firstname

def main():
    add_multiple_values(1,2,3,4,5)

if __name__ == '__main__':
    main()
