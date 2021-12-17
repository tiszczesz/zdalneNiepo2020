interface ChildProps {
    cmpName: string;
    onClick: ()=>void;
}


export const Child = ({cmpName,onClick}:ChildProps) => {
    return <div>
        Witam z komponentu dziecka o nazwie {cmpName} <br />
        <button onClick={onClick}>Przycisk</button>
    </div>
}

export const ChildAsFC: React.FC<ChildProps> = ({onClick,cmpName,children}) => {
    return <div className="first">
        Komponent FC {cmpName}
        {children} <br />
        <button onClick={onClick}>Przycisk</button>
    </div>
}