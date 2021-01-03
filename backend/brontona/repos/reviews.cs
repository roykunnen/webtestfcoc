using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;
using System.Linq;
using System.Runtime.Serialization;
using System.Threading.Tasks;

namespace FCOC.Classes
{
    [DataContract]
    public class reviews
    {
        [Key]
        [DataMember]
        public string reviewid { get; set; }
        [DataMember]
        public string productid { get; set; }
        [DataMember]
        public string customerid { get; set; }
        [DataMember]
        public double score { get; set; }
        [DataMember]
        public string text { get; set; }
        [DataMember]
        public string timestamp { get; set; }
    }
}
