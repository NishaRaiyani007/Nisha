class F:
    def f(self):
        print("Car")
        print("Bike")
        print("bICYCLE")


class Eb(F):
    def eb(self):
        print("Daru")

class Yb(F):
    def yb(self):
        print("Bear")


class N(F):
    def n(self):
        print("Apple Juice")


obj = Eb()
obj.f()
obj.eb()

obj1 = Yb()
obj1.f()
obj1.yb()

obj2 = N()
obj2.f()
obj2.n()
