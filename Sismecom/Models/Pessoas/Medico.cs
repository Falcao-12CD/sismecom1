namespace Sismecom.Models.Pessoas
{
    public class Medico : Pessoa
    {
        public string especialidade { get; set; } = string.Empty;
        public string cod_crm { get; set; }
        public string cpf { get; set; } = string.Empty;

    }
}
