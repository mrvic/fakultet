SELECT 
rezervacija.oznvrstadan,
rezervacija.sat,
pred.nazpred 
FROM `fakultet`.`rezervacija` INNER JOIN pred 
on rezervacija.sifpred=pred.sifpred 
WHERE ozndvorana LIKE ?;