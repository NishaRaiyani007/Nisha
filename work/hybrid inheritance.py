class G:
    def g(self):
        print("home")

class F(G):
    def f(self):
        print("flat")

class U(G):
    def u(self):
        print("car")

class N(F,U):
    def n(self):
        print("phone")


obj2 = N()
obj2.f()
obj2.u()
obj2.g()
obj2.n()




        
