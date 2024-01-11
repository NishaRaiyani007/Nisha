class G:
    def g(self):
        print("Car")


class F(G):
    def f(self):
        print("Bike")

class N(F):
    def n(self):
        print("Activa")


obj = N()
obj.g()
obj.f()
obj.n()
