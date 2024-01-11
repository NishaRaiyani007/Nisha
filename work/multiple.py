class F:
    def f(self):
        print("Car")

class M:
    def m(self):
        print("Saree")

class N(F,M):
    def n(self):
        print("Watch")


obj=N()
obj.f()
obj.m()
obj.n()
