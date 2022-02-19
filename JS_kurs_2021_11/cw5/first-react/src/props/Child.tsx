interface ChildProps {
    cmpName: string;
    nowe: string;
    onClick: ()=>void;
}


export const Child = ({cmpName,nowe,onClick}:ChildProps) => {
    return <div>
        Witam z komponentu dziecka o nazwie {cmpName} nowe: {nowe.toLocaleUpperCase()}<br />
        <button onClick={onClick}>Przycisk</button>
    </div>
}

export const ChildAsFC: React.FC<ChildProps> = ({onClick,cmpName,nowe,children}) => {
    return <div className="first">
        Komponent FC {cmpName}
        {children} <br />
        <button onClick={onClick}>Przycisk</button>
        {nowe}
    </div>
}