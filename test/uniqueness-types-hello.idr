module Main

%language UniquenessTypes

data UList : Type -> UniqueType where
    Nil   : UList a
    (::)  : a -> UList a -> UList a

data MyList : (elem : Type) -> Type where
  MyNil : MyList elem
  MyCons : elem -> MyList elem -> MyList elem

MyList1 : Type
MyList1 = MyList Integer

append : {a : Type} -> MyList a -> MyList a -> MyList a
append MyNil ys = ys
append (MyCons x xs) ys = MyCons x (append xs ys)

append1 : MyList1 -> MyList1 -> MyList1
append1 MyNil ys = ys
append1 (MyCons x xs) ys = MyCons x (append xs ys)

showMyList : Show a => MyList a -> String
showMyList MyNil = "Nil"
showMyList (MyCons x xs) = "MyCons " ++ show x  ++ " " ++ showMyList xs

myFun : MyList Integer -> Integer -> Integer
myFun MyNil j = j
myFun (MyCons x xs) j = x + myFun xs j

umap : (a -> b) -> UList a -> UList b
umap f [] = []
umap f (x :: xs) = f x :: umap f xs

showU : Show a => Borrowed (UList a) -> String
showU xs = "[" ++ showU' xs ++ "]" where
  showU' : Borrowed (UList a) -> String
  showU' [] = ""
  showU' [x] = show x
  showU' (Read (x :: xs)) = show x ++ ", " ++ showU' (lend xs)

printAndUpdate : UList Int -> IO ()
printAndUpdate xs = do putStrLn (showU xs)
                       let xs' = umap (*2) xs -- xs no longer available!
                       putStrLn (showU xs')

(++) : UList a -> UList a -> UList a
(++) Nil ys = ys
(++) (x :: xs) ys = x :: (xs ++ ys)

dupList : .{a : Type} -> (UList a) -> UList a
dupList Nil = Nil
dupList (x :: xs) = x :: x :: xs

showUList : Show a => UList a -> String
showUList Nil = "Nil"
showUList (x :: xs) = show x ++ " :: " ++ showUList xs

main : IO ()
main = do
  putStrLn "Hello world"
--   putStrLn (show (1000 + 2000))
--   putStrLn (show (100012323222232323223232223223232 + 2 + 3))
--   putStrLn (showMyList (append (MyCons 10 MyNil) (MyCons 20 (MyCons 30 MyNil))))
--   putStrLn (showMyList (append (MyCons 'a' MyNil) (MyCons 'b' (MyCons 'c' MyNil))))
--   putStrLn (show (myFun (MyCons 10 MyNil) 20))
--   putStrLn (showUList (dupList (10 :: Nil)))
--   putStrLn (show ((\x => x + 1) 2))
