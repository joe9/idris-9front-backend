module Main

data MyNat = MyZ | MyS MyNat

add : MyNat -> MyNat -> MyNat
add MyZ y  = y
add (MyS k) y  = MyS (add k y)

data MyVect : MyNat -> Type -> Type where
  VNil : MyVect MyZ a
  VCons : a -> MyVect k a -> MyVect (MyS k) a

app : {a : Type} -> {m : MyNat} -> {n : MyNat} -> MyVect n a -> MyVect m a -> MyVect (add n m) a
app VNil ys = ys
app (VCons x xs) ys = VCons x (app xs ys)

showVect : Show a => {n : MyNat} -> MyVect n a -> String
showVect VNil = "Nil"
showVect (VCons v vs) = show ("VCons " ++ show v ++ " " ++ showVect vs)

showNat : MyNat -> String
showNat MyZ = "Z"
showNat (MyS v) = show ("S (" ++ showNat v ++ ")")

main : IO ()
main = do
  putStrLn "Hello world"
  putStrLn (showVect (app (VCons 10 VNil) (VCons 20 VNil)))
