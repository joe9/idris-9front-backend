module Main

data MyList : (elem : Type) -> Type where
  MyNil : MyList elem
  MyCons : elem -> MyList elem -> MyList elem

MyList1 : Type
MyList1 = MyList Integer

-- idris version
append : {a : Type} -> MyList a -> MyList a -> MyList a
append MyNil ys = ys
append (MyCons x xs) ys = MyCons x (append xs ys)

-- idris version
append : List a -> List a -> List a
append Nil ys = ys
append (Cons x xs) ys = Cons x (append xs ys)

-- -- DDC version
-- -- | Append two lists.
-- append (xx yy: List a): List a
--     = case xx of
--         Nil -> yy
--         Cons x xs -> Cons x (append xs yy)

-- append : List a -> List a -> List a
-- append Nil ys = ys
-- append (Cons x xs) ys = Cons x (append xs ys)

-- append (xx yy: List a): List a
--     = case xx of
--         Nil -> yy
--         Cons x xs -> Cons x (append xs yy)

-- append (xs ys: List a): List a
--   Nil ys = ys
--   (Cons x xs) ys = Cons x (append xs yy)

-- -- Idris version
-- append : Integer -> Integer -> Integer
-- append 0 y = y
-- append 1 y = 1 + y

-- -- DDC version
-- -- pattern matching and the types are defined in most of the cases, why not integrate them?
-- append (x y : Integer): Integer
--   = case x of
--          0 -> y
--          1 -> 1 + y

-- append (x y : Integer): Integer
--   | x == 0 = y
--   | otherwise = 1 + y

append1 : MyList1 -> MyList1 -> MyList1
append1 MyNil ys = ys
append1 (MyCons x xs) ys = MyCons x (append xs ys)

showMyList : MyList Integer -> String
showMyList MyNil = "Nil"
showMyList (MyCons x xs) = "MyCons " ++ show x  ++ " " ++ showMyList xs

myFun : MyList Integer -> Integer -> Integer
myFun MyNil j = j
myFun (MyCons x xs) j = x + myFun xs j

main : IO ()
main = do
  putStrLn "Hello world"
  putStrLn (show (1000 + 2000))
  putStrLn (show (100012323222232323223232223223232 + 2 + 3))
  putStrLn (showMyList (append (MyCons 10 MyNil) (MyCons 20 (MyCons 30 MyNil))))
  putStrLn (show (myFun (MyCons 10 MyNil) 20))


