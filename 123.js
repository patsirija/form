  db.collection("namedb").aggregate([
    {$sample: {size: 3}} 
  ]).sort( { namerow: 1 } ).toArray(function(err, users) {
  });