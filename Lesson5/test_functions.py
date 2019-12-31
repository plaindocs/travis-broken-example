import unittest

from functions import *


class TestFunctions(unittest.TestCase):
    """ Test add_values
    """
    def setUp(self):
        self.value1 = 10
        self.value2 = 20

    def test_add_values(self):
        self.assertEqual(30, add_two_values(self.value1, self.value2))

    def test_add_values_two(self):
        self.assertEqual(15, add_multiple_values(1,2,3,4,5))

    def test_full_name(self):
        self.assertEqual("Doe, John", get_full_name("John", "Doe"))

if __name__ == '__main__':
    unittest.main()
