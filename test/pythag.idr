
module Main

pythag : Int -> List (Int, Int, Int)
pythag max = [(x, y, z) | z <- [1..max], y <- [1..z], x <- [1..y],
                          x * x + y * y == z * z]

-- turn off partial evaluation to see the actual Intermediate Representation
--   http://docs.idris-lang.org/en/latest/reference/partial-evaluation.html
test : Integer
test = 10

main : IO ()
main = print (pythag 50)
